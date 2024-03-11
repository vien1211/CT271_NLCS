<?php
class activity extends DController{
    public function __construct(){
        $data = array();
        $message = array();
        parent::__construct();
        
    }
   
    public function list_activity(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/sidebar');
        $this->load->view('cpanel/navbar');
        $activitymodel = $this->load->model('activitymodel');
        $activities = 'activities';
        $data['activities'] = $activitymodel->activities($activities);
        $this->load->view('activity', $data);
        $this->load->view('cpanel/footer');
    }

    public function activitybyid(){
        $this->load->view('header');
        $activitymodel = $this->load->model('activitymodel');
        $id = 1;
        $activities = 'activities';
        $data['activitiesbyid'] = $activitymodel->activitiesbyid($activities, $id);
        $this->load->view('activitybyid', $data);
        $this->load->view('footer');
    }

    public function addactivity(){
        $this->load->view('addactivity');
    }

    public function insertactivity(){
        
        $activitymodel = $this->load->model('activitymodel');
        $activities = 'activities';
        $title = $_POST['title'];
        $time = $_POST['time'];
        $place = $_POST['place'];
        $data = array(
            'tenhoatdong' => $title,
            'thoigian' => $time,
            'diadiem' => $place
        );
        $result = $activitymodel->insertactivity($activities,$data);
        
        if($result==1){
            $message['msg'] = "Them du lieu thanh cong";
        }else{
            $message['msg'] = "Them du lieu that bai";
        }
        $this->load->view('addactivity', $message);
    }

    public function updateactivity(){
        
        $activitymodel = $this->load->model('activitymodel');
        $activities = 'activities';
        /*$title = $_POST['title'];
        $time = $_POST['time'];
        $place = $_POST['place'];*/
        $id =3;
        $cond = "activities.id_activities='$id'";
        $data = array(
            'tenhoatdong' => 'Hien mau tinh nguyen',
            'thoigian' => '2023-11-04',
            'diadiem' => 'Truong Nong Nghiep'
        );
        $result = $activitymodel->updateactivity($activities,$data,$cond);
        
        if($result==1){
            echo "Cap nhat du lieu thanh cong";
        }else{
            echo "Cap nhat du lieu that bai";
        }
        
    }

    public function deleteactivity(){
        $activitymodel = $this->load->model('activitymodel');
        $activities = 'activities';
        /*$title = $_POST['title'];
        $time = $_POST['time'];
        $place = $_POST['place'];*/
        $id =4;
        $cond = "activities.id_activities='$id'";
        
        $result = $activitymodel->deleteactivity($activities,$cond);
        
        if($result==1){
            echo "Xoa du lieu thanh cong";
        }else{
            echo "Xoa du lieu that bai";
        }
    }
}
?>