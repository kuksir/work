<? 

class Connect                       //класс для подключения базы данных
{
    public $host;
    public $dbname;
    public $charset;
    private $login;
    private $password;
    public $data_base;

    function __construct($host = 'localhost', $dbname = 'cm32380_db', $charset = 'utf8', $login = 'cm32380_db', $password = '12345') // функция - конструктор для соединения с базой данных
    {
        $this->data_base = "mysql:host=$host;dbname=$dbname;charset=$charset";
        $this->host     = $host;
        $this->dbname     = $dbname;
        $this->charset     = $charset;
        $this->login     = $login;
        $this->password = $password;
    }

    function get_Data_DB ($query) //если есть соединение с базой данных, предоставляет доступ к сущностям БД
    {
        try
        {
            $db = new PDO($this->data_base, $this->login, $this->password);
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }

        $stmt = $db->prepare($query);
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $out[] = $row;
        }
        return $out ? $out : false;
    }
}

?>