<?php 

class Page extends Dbh {
  const BASE_URL = 'http://127.0.0.1:8000/';  
  public function getSlider() {
    $status = '1';  
    $sql = "SELECT * FROM sliders where status= ? Order By id";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$status]);
    $stmt->execute();

    while($result = $stmt->fetchAll()) {
      return $result;
    };
  }


  public function getTopProduct() {
    $status = '1';
    $sql = "SELECT * FROM products where status= ? Order By id DESC Limit 3" ;
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$status]);
    $stmt->execute();
    while($result = $stmt->fetchAll()) {
     
      return $result;
    };
  }


  public function getAllProduct() {
    $status = '1';
    $sql = "SELECT * FROM products where status= ? Order By id DESC " ;
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$status]);
    $stmt->execute();
    while($result = $stmt->fetchAll()) {
     
      return $result;
    };
  }

  public function getSettings() {
    $id = 1;
    $sql = "SELECT * FROM settings WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt->fetch();

    return $result;
  }

  public function getpageDetails($page) {
   
    $sql = "SELECT * FROM pages WHERE name = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$page]);
    $result = $stmt->fetch();
  
    return $result;
  }

  public function submitQuery($name,$email,$mobile,$subject,$message) {

    $created_at = date('Y-m-d H:i:s');
  
    $sql = "INSERT INTO supports(name,email,mobile,subject,description,created_at) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$name,$email,$mobile,$subject,$message,$created_at]);
   //die(print_r($stmt->errorInfo(), true));
  }

  // public function editPost($id) {
  //   $sql = "SELECT * FROM posts WHERE id = ?";
  //   $stmt = $this->connect()->prepare($sql);
  //   $stmt->execute([$id]);
  //   $result = $stmt->fetch();

  //   return $result;
  // }

  // public function updatePost($id, $title, $body, $author) {
  //   $sql = "UPDATE posts SET title = ?, body = ?, author = ? WHERE id = ?";
  //   $stmt = $this->connect()->prepare($sql);
  //   $stmt->execute([$title, $body, $author, $id]);
  // }

  // public function delPost($id) {
  //   $sql = "DELETE FROM posts WHERE id = ?";
  //   $stmt = $this->connect()->prepare($sql);
  //   $stmt->execute([$id]);
  //}
}