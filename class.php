<?
require_once('connect.php');

class book
{
    public $data;
    public function add_book ($genre, $autor, $name, $year)
    {
        $db_connect = new Connect();
        $query = $db_connect->get_Data_DB("INSERT INTO `book` (`genre`,`autor`,`name`, `year`) VALUES ('$genre','$autor','$name','$year')");
        self::get_data();
    }

    public function get_data ()
    {
        $db_connect = new Connect();
        $data = $db_connect->get_Data_DB("SELECT * FROM `book` ORDER BY id_book");
        $this->data = $data;
    }

    public function get_data_page ($start_pos = 0, $perpage = 10)
    {
        $db_connect = new Connect();
        $data = $db_connect->get_Data_DB("SELECT * FROM `book` ORDER BY id_book ASC LIMIT $start_pos, $perpage");
        $this->data = $data;
    }

    public function get_result ()
    {
        $temp['status'] = 'success';
        $temp['data'] = $this->data;
        return $temp;
    }

    public function delete_row($id)
    {
        $db_connect = new Connect();
        $data = $db_connect->get_Data_DB("DELETE FROM `book` WHERE id_book = $id");
        $this->data = $data;
    }

    public function update_row($id,$genre,$autor,$name,$year)
    {
        $db_connect = new Connect();
        $data = $db_connect->get_Data_DB("UPDATE book SET genre = '$genre', autor = '$autor', name = '$name', year = '$year' WHERE id_book = '$id' ");
        $this->data = $data;
    }
}

?>