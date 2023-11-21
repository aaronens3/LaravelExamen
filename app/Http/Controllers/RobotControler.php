<?php 

use App/Http/Controlers/RobotControler;

use App/Models/Industrial;
use App/Models/Land;
use App/Models/Aerial;
use App/Models/Maintenance;
use App/Model/Robot;
use App/Technical;

class RobotsController Extends Controller{
    use Maintenance;

    private $robots;
    private $tehnicals;

    public functions __construct(){
        $this->Robot = [
            new Industrial('Industrial Robot 1', 'Industrial','High','Metal', 500),
            new Aerial('Aerial Robot 1', 'Aerial', 'High', 'Plastic', '8 hours', 'Battery'),
            new Land('Land Robot 1', 'Land', 'Medium', 'Steel', '12 Hours', '4 Wheels')
        ];
        $this->Technical =[
            new Technical('Technical 1', 'tech1@example.com', 'password1'),
            new Technical('Technical 2', 'tech2@example.com', 'password2')
        ];
    }

    public function index() {
        return view('index', ['robot' => $this->robots, 'Technical' => $this->Technical ])
    }

    public function show($id) {
        $robot = $this ->robots [$id];
        return view ('show'['robot' => $robot]),
    }

    public function formReview(){
        
    }
}