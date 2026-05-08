CREATE DATABASE IF NOT EXISTS entateaskarsafe_db;
CREATE USER IF NOT EXISTS 'entateaskarsafe_user'@'localhost' IDENTIFIED BY 'Pass2026!';
GRANT ALL PRIVILEGES ON entateaskarsafe_db.* TO 'entateaskarsafe_user'@'localhost';
FLUSH PRIVILEGES;

USE entateaskarsafe_db;

CREATE TABLE IF NOT EXISTS members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    registration_number VARCHAR(50) NOT NULL,
    role VARCHAR(100) NOT NULL,
    subdomain VARCHAR(100) NOT NULL
);

INSERT INTO members (name, registration_number, role, subdomain) VALUES
('Ssebakumba Joseph', '23/U/17370/PS', 'Security Officer', 'ssebakumba.askarsafe.org'),
('Naigaga Joyce Faith', '23/U/13183/EVE', 'Domain Administrator', 'naigaga.askarsafe.org'),
('Nalunkuuma Hellen', '23/U/24328/PS', 'Project Analyst and Researcher', 'hellen.askarsafe.org'),
('Nayiga Winnie', '23/U/15707/EVE', 'Developer', 'nayiga.askarsafe.org'),
('Kisakye Daphine', '23/U/10022/EVE', 'Document Lead', 'daphine.askarsafe.org'),
('Jjumba Timothy Robert', '23/U/08443/PS', 'Project Lead and System Administrator', 'jjumba.askarsafe.org'),
('Mbabazi Leticia', '23/U/11230/PS', 'Network Administrator', 'leticia.askarsafe.org'),
('Kakumba Halith', '23/U/08729/EVE', 'Developer', 'halith.askarsafe.org'),
('Kayom Janet', '23/U/09506/EVE', 'Monitoring and Logs Administrator', 'kayom.askarsafe.org');