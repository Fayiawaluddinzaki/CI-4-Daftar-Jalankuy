namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
// when installed via composer
require_once 'vendor/autoload.php';
// load Faker autoloader
require_once '/path/to/Faker/src/autoload.php';

class DaftarSeeder extends Seeder
{
        public function run()
        {
                $data = [
                        [
                        'username' => 'darth',
                        'email'    => 'darth@theempire.com'
                        ]
                        
                ];

                // Simple Queries
                //$this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

                // Using Query Builder
                $this->db->table('daftar')->insert($data);
        }
}