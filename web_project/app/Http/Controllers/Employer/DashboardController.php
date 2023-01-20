<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\DashboardRepository;
//use App\Repositories\UserRepository;

use App\Entities\User;
use DateTime;

class DashboardController extends Controller {

    protected $dashboardRepository;
    protected $userRepository;   

    public function __construct(DashboardRepository $dashboardRepository/*, UserRepository $userRepository*/) {
        $this->dashboardRepository = $dashboardRepository;
       // $this->userRepository = $userRepository;       
    }

    public function index() {
        $title = '';
        $subTitle = 'Dashboard';
        $data['title'] = $title;
        $data['subTitle'] = $subTitle;

        $data['count_actived_user'] =  User::where('active', '=', '1')->count();

        $data['count_desactived_user'] = User::where('active', '=', '0')->count();   
         
        return view('employer.dashboard.index', $data);
    }    

}
    


