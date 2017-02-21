<?php
namespace App\Http\Controllers\Admin;
//字符编码
header("content-type:text/html;charset=utf-8");

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;
use Request;
use DB;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
class CommonController extends Controller
{
    public $result = [
        'title'=>'提示信息',
        'msg'=>'请先登录',
        'url'=>'login',
        'wait'=>3
    ];
   public function __construct(){
       $session = new session;
       $admin_id = $session->get('admin_id');
       if (!isset($admin_id))
       {
           echo "<script>alert('请先登录');location.href='login'</script>";
       }
       $url = Input::url();
       $urlArray=parse_url($url);
       $location =  strrpos ($urlArray['path'],'/');
       $action = substr($urlArray['path'],$location+1);
       $powerArray = DB::select("select DISTINCT dh_power.p_action,dh_power.p_name from dh_admin_role 
                    INNER JOIN dh_role ON dh_admin_role.role_id=dh_role.r_id  
                    INNER JOIN dh_power_role ON dh_power_role.role_id=dh_role.r_id
                    INNER JOIN dh_power on dh_power.p_id=dh_power_role.power_id
                    WHERE admin_id=$admin_id");
       $powerArray =  json_encode($powerArray);
       $powerArray = json_decode($powerArray,true);
       $powerArray=array_column($powerArray,'p_action');
      if(!in_array($action,$powerArray))
       {
           echo "<script>alert('对不起您没有访问权限');history.go(-1)</script>";die;
       }
       //操作日志记录
           //操作的方法
       if($action != 'log_list'&&$action!='deletemore')
       {
           $logArray = DB::select("select  DISTINCT dh_power.p_name from dh_admin_role 
                        INNER JOIN dh_role ON dh_admin_role.role_id=dh_role.r_id  
                        INNER JOIN dh_power_role ON dh_power_role.role_id=dh_role.r_id
                        INNER JOIN dh_power on dh_power.p_id=dh_power_role.power_id
                        WHERE dh_power.p_action='$action'");
           //设置中国时区
           date_default_timezone_set('PRC');
           $addLog = array(
               'log_addtime'=>date("Y-m-d H:i:s"),
               'log_value'=>$logArray[0]->p_name,
               'log_ip'=>$_SERVER['REMOTE_ADDR'],
               'admin_id'=>$admin_id
           );
           DB::table('log')->insert($addLog);
       }

  }
}
?>