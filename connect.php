<?

class Connect
{
    public $host;
    public $dbname;
    public $charset;
    private $login;
    private $password;
    public $data_base;

    function __construct($host = 'localhost', $dbname = 'cp10690_db', $charset = 'utf8', $login = 'cp10690_db', $password = '12345')
    {
        $this->data_base = "mysql:host=$host;dbname=$dbname;charset=$charset";
        $this->host     = $host;
        $this->dbname     = $dbname;
        $this->charset     = $charset;
        $this->login     = $login;
        $this->password = $password;
    }

    function get_Data_DB ($query)
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