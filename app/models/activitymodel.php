<?php
class activitymodel extends DModel{
    public function __construct(){
        parent::__construct();
    }
    public function activities($activities){
        $sql = "SELECT * FROM $activities";
        return $this->db->select($sql);
        
    }
    public function activitiesbyid($activities, $id){
        $sql = "SELECT * FROM $activities WHERE id_activities=:id";
        $data = array(':id' => $id);
        return $this->db->select($sql,$data);
    }

    public function insertactivity($activities, $data){
        return $this->db->insert($activities,$data);
    }

    public function updateactivity($activities,$data,$cond){
        return $this->db->update($activities,$data,$cond);
    }

    public function deleteactivity($activities,$cond){
        return $this->db->delete($activities, $cond);
    }
}
?>


