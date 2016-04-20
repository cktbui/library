# Privileges for `librarian`@`%`

GRANT USAGE ON *.* TO 'librarian'@'localhost';

GRANT ALL PRIVILEGES ON `library`.* TO 'librarian'@'localhost' WITH GRANT OPTION;

GRANT ALL PRIVILEGES ON `librarian\_%`.* TO 'librarian'@'localhost';