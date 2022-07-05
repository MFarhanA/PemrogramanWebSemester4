--
-- Database: 'userdata'
--

-- -------------------------------------------------------

--
-- Struktur dari tabel 'user'
--
CREATE TABLE 'crud' (
	'id' int(11) NOT NULL,
	'username' varchar(30) NOT NULL,
	'email' varchar(50) NOT NULL,
	'password' varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;