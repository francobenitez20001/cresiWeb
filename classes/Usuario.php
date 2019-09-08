<?php

    class Usuario
    {
        private $id;
        private $username;
        private $password;
        private $email;
        private $name;
        private $lastname;
        private $cookie_data;
        private $progress;


        public function listarUsuario()
        {
            $usuario = $_SESSION['usuario'];
            $link = Conexion::conectar();
            $sql = "SELECT * FROM users
                      WHERE username = :username";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':username', $usuario, PDO::PARAM_STR);
            $stmt->execute();
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
            return $resultado;
        }

        public function login()
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $link = Conexion::conectar();
            $sql = "SELECT username,password FROM users
                           WHERE username = :username
                           AND password = :password";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC); //array para obtener nombre,apellido e email.
            $cantidad = $stmt->rowCount();
            if ($cantidad == 0){
                header('location:login.php?error=1');
            }else{
                $_SESSION['loginCresi'] = 1;
                $_SESSION['usuario'] = $username;
                $_SESSION['correctas'] = 0;
                $_SESSION['incorrectas'] = 0;
                $_SESSION['preguntaRespondida'] = [];
                header('location:index.php');
            }
        }

        public function logout()
        {
            session_unset();
            session_destroy();
            header('refresh:3; url=login.php');
        }

        public function register()
        {
            $this->cargarDatosDesdeForm();
            $username = $this->getUsername();
            $password = $this->getPassword();
            $email = $this->getEmail();
            $name = $this->getName();
            $lastname = $this->getLastname();
            $link = Conexion::conectar();
            $queryPrevious = "SELECT username, email
                                     FROM users
                                      WHERE username = :username
                                      AND email = :email";
            $stmt = $link->prepare($queryPrevious);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            $cantidad = $stmt->rowCount();
            if ($cantidad >= 1)
            {
                header('location: register.php?error=duplicate');
                //exit();
            }else {
                $sql = "INSERT INTO users (username,password,email,name,lastname)
                           VALUES (:username, :password, :email, :name,
                                   :lastname)";
                $stmt = $link->prepare($sql);
                ######################################
                ########## biendeo de datos ##########
                ######################################
                $stmt->bindParam(':username', $username, PDO::PARAM_STR);
                $stmt->bindParam(':password', $password, PDO::PARAM_STR);
                $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                $stmt->bindParam(':name', $name, PDO::PARAM_STR);
                $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
                if ($stmt->execute())
                {
                    $this->setId($link->lastInsertId());
                    $_SESSION['login'] = 1;
                    $_SESSION['usuario_sesion'] = $username;
                    $_SESSION['correctas'] = 0;
                    $_SESSION['incorrectas'] = 0;
                    header('location:index.php');
                    return true;
                }
                return false;
            }
        }

        public function modificarUsuario()
        {
          $this->cargarDatosDesdeForm();
          $id = $this->getId();
          $username = $this->getUsername();
          $email = $this->getEmail();
          $name = $this->getName();
          $lastname = $this->getLastname();
          $link = Conexion::conectar();
          $sql = "UPDATE users SET username = :username,
                                  email = :email,
                                  name = :name,
                                  lastname = :lastname
                                WHERE id = :id";
          $stmt = $link->prepare($sql);
          $stmt->bindParam(':username', $username, PDO::PARAM_STR);
          $stmt->bindParam(':email', $email, PDO::PARAM_STR);
          $stmt->bindParam(':name', $name, PDO::PARAM_STR);
          $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
          $stmt->bindParam(':id', $id, PDO::PARAM_INT);
          if ($stmt->execute()) {
            header('location: logout.php?reporting=1');
            return true;
          }
          return false;
        }


        public function cargarDatosDesdeForm()
        {
            if (isset($_POST['id'])) {
                $this->setId($_POST['id']);
            }
            $this->setUsername($_POST['username']);
            $this->setPassword($_POST['password']);
            $this->setEmail($_POST['email']);
            $this->setName($_POST['name']);
            $this->setLastname($_POST['lastname']);
        }

        ################  GETTER AND SETTERS  ################


        public function getId()
        {
            return $this->id;
        }
        public function setId($id)
        {
            $this->id = $id;
        }

        public function getUsername()
        {
            return $this->username;
        }
        public function setUsername($username)
        {
            $this->username = $username;
        }


        public function getPassword()
        {
            return $this->password;
        }
        public function setPassword($password)
        {
            $this->password = $password;
        }


        public function getEmail()
        {
            return $this->email;
        }
        public function setEmail($email)
        {
            $this->email = $email;
        }


        public function getName()
        {
            return $this->name;
        }
        public function setName($name)
        {
            $this->name = $name;
        }


        public function getLastname()
        {
            return $this->lastname;
        }
        public function setLastname($lastname)
        {
            $this->lastname = $lastname;
        }


        public function getCookieData()
        {
            return $this->cookie_data;
        }
        public function setCookieData($cookie_data)
        {
            $this->cookie_data = $cookie_data;
        }


        public function getProgress()
        {
            return $this->progress;
        }

        public function setProgress($progress)
        {
            $this->progress = $progress;
        }



    }
