using System.Data;
using MySql.Data.MySqlClient;

public class DbManager_Prodi {
    private readonly string connectionString;
    private readonly MySqlConnection _connection;
    public DbManager_Prodi(IConfiguration configuration) {
        connectionString = configuration.GetConnectionString("DefaultConnection");
        _connection = new MySqlConnection(connectionString);
    }

    // GET
    public List<Prodi> GetAllProdi(){
        List<Prodi> prodiList = new List<Prodi>();
        try{
            using (MySqlConnection connection = new MySqlConnection(connectionString)){
                string query = "SELECT * FROM prodi";
                MySqlCommand command = new MySqlCommand(query, connection);
                connection.Open();
                using (MySqlDataReader reader = command.ExecuteReader()){
                    while (reader.Read()){
                        Prodi prodi  = new Prodi{
                            id = Convert.ToInt32(reader["Id"]),
                            nama = reader["Nama"].ToString(),
                            jurusan = reader["Jurusan"].ToString(),
                            email_prodi = reader["Email_prodi"].ToString(),
                            status = reader["Status"].ToString(),
                            
                        };
                        prodiList.Add(prodi);
                    }
                }
            }
        }
        catch (Exception ex){
            Console.WriteLine(ex.Message);
        }
        return prodiList;
    }

    
    // CREATE
  public int CreateProdi(Prodi prodi) {
    using (MySqlConnection connection = _connection) {
      string query = "INSERT INTO prodi (nama, jurusan, email_prodi, status) VALUES (@Nama, @jurusan, @Email_prodi, @Status)";
      using (MySqlCommand command = new MySqlCommand(query, connection)) {
        command.Parameters.AddWithValue("@Nama", prodi.nama);
        command.Parameters.AddWithValue("@Jurusan", prodi.jurusan); // Corrected typo
        command.Parameters.AddWithValue("@Email_prodi", prodi.email_prodi);
        command.Parameters.AddWithValue("@Status", prodi.status);

        connection.Open();
        return command.ExecuteNonQuery();
      }
    }
  }


    //UPDATE
    public int UpdateProdi(int id, Prodi prodi){
        using (MySqlConnection connection = _connection){
            string query = "UPDATE prodi SET nama = @Nama, jurusan = @Jurusan, email_prodi = @Email_prodi" + "status = @Status WHERE id = @Id";
            using (MySqlCommand command = new MySqlCommand(query, connection)){
                command.Parameters.AddWithValue("@Nama", prodi.nama);
                command.Parameters.AddWithValue("@Jurusan", prodi.jurusan);
                command.Parameters.AddWithValue("@Email_prodi", prodi.email_prodi);
                command.Parameters.AddWithValue("@Status", prodi.status);
                command.Parameters.AddWithValue("@Id", id);

                connection.Open();
                return command.ExecuteNonQuery();
            }
        }
    }


    //DELETE
    public int DeleteProdi(int id){
        using (MySqlConnection connection = _connection){
            string query = "DELETE FROM prodi WHERE id = @Id";
            using (MySqlCommand command = new MySqlCommand(query, connection)){
                command.Parameters.AddWithValue("@Id", id);

                connection.Open();
                return command.ExecuteNonQuery();
            }
        }
    }
}

// Mukhamad_Viko_Ramayudha