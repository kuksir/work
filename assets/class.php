<?
require_once('connect.php'); // подключение класса Connect

class book
{
    public $data;
    public function add_book ($genre, $autor, $name, $year) //функция для добавления записи о новой книге в базу данных
    {
        $db_connect = new Connect();
        $query = $db_connect->get_Data_DB("INSERT INTO `book` (`genre`,`autor`,`name`, `year`) VALUES ('$genre','$autor','$name','$year')");
        self::get_data();
    }

    public function get_data () //функция выбора всех данных из таблицы book
    {
        $db_connect = new Connect();
        $data = $db_connect->get_Data_DB("SELECT * FROM `book` ORDER BY id_book");
        $this->data = $data;
    }

    public function get_line($id) //функция выбора строки по входному id
    {
        $db_connect = new Connect();
        $data = $db_connect->get_Data_DB("SELECT * FROM `book` WHERE id_book = $id");
        $this->data = $data;
    }

    public function delete_row($id) //функция удаления записи из базы данных
    {
        $db_connect = new Connect();
        $data = $db_connect->get_Data_DB("DELETE FROM `book` WHERE id_book = $id");
        $this->data = $data;
    }

    public function update_row($id,$genre,$autor,$name,$year) //функция изменения строки в таблице базы данных
    {
        $db_connect = new Connect();
        $data = $db_connect->get_Data_DB("UPDATE book SET genre = '$genre', autor = '$autor', name = '$name', year = '$year' WHERE id_book = '$id' ");
        $this->data = $data;
    }
}

?>