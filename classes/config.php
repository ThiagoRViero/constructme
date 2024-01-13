<!-- Página que contem classe de configuração da página sendo assim tudo que for relacionado às configurações da página devem estar aqui. -->
<?php
class Config {
  /* Consulta as configurações salvas */
  static function consultaConfig() {
    require_once 'conexao.php';
    $stmt = conexao::getInstance();
    $stmt = $stmt->prepare("SELECT `nome_loja`, `nome_logo`, `sobre`, `endereco`,`email`, `whats`, `telefone`, `facebook`, `twitter`,`instagram`,`youtube` FROM config WHERE id = 1");
    $stmt->execute();

    return $stmt;
  }
  /* As funções a seguir servem para buscar e a seguinte para editar o dado no banco de dados, sendo assim o procedimento se repete para cada item de configuração da página */
  static function nome_loja(){
    $stmt = Config::consultaConfig(); 
    while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)):

    return $rs['nome_loja'];
    endwhile; 
  }

  static function alteraNome_loja($nome_loja){
    require_once 'conexao.php';
    $stmt = conexao::getInstance();
    $stmt = $stmt->prepare("UPDATE `config` SET `nome_loja`=:nome_loja WHERE id = 1 ");
          $stmt->bindParam(':nome_loja', $nome_loja);
          
          if($stmt->execute()){
              
          } else {
              echo "Ocorreu um erro na inclusão do registro";
              print_r($stmt->errorInfo());
          }
  }

  static function logo(){
        $stmt = Config::consultaConfig(); 
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)):

        return $rs['nome_logo'];
        endwhile; 
  }

  static function alteraLogo($nome_logo){
    require_once 'conexao.php';
    $stmt = conexao::getInstance();
    $stmt = $stmt->prepare("UPDATE `config` SET `nome_logo`=:nome_logo WHERE id = 1 ");
          $stmt->bindParam(':nome_logo', $nome_logo);
          
          if($stmt->execute()){
          } else {
              echo "Ocorreu um erro na inclusão do registro";
              print_r($stmt->errorInfo());
          }
  }

  static function telefone(){
    $stmt = Config::consultaConfig(); 
    while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)):
    
    return $rs['telefone'];
    endwhile; 
  }

  static function alteraTelefone($telefone){
    
    require_once 'conexao.php';
    $stmt = conexao::getInstance();
    $stmt = $stmt->prepare("UPDATE `config` SET `telefone`=:telefone WHERE id = 1 ");
    $stmt->bindParam(':telefone', $telefone);
          
    if($stmt->execute()){
    } else {
        echo "Ocorreu um erro na inclusão do registro";
        print_r($stmt->errorInfo());
    }
  }

  static function whats(){
    $stmt = Config::consultaConfig(); 
    while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)):
    
    return $rs['whats'];
  endwhile; 
  }

  static function alteraWhats($whats){
    require_once 'conexao.php';
    $stmt = conexao::getInstance();
    $stmt = $stmt->prepare("UPDATE `config` SET `whats`=:whats WHERE id = 1 ");
          $stmt->bindParam(':whats', $whats);
          
          if($stmt->execute()){
               
          } else {
              echo "Ocorreu um erro na inclusão do registro";
              print_r($stmt->errorInfo());
          }
  }

  static function email(){
    $stmt = Config::consultaConfig(); 
    while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)):
    
    return $rs['email'];
  endwhile; 
  }

  static function alteraEmail($email){
    require_once 'conexao.php';
    $stmt = conexao::getInstance();
    $stmt = $stmt->prepare("UPDATE `config` SET `email`=:email WHERE id = 1 ");
          $stmt->bindParam(':email', $email);
          
          if($stmt->execute()){
               
          } else {
              echo "Ocorreu um erro na inclusão do registro";
              print_r($stmt->errorInfo());
          }
  }

  static function endereco(){
        $stmt = Config::consultaConfig(); 
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)):
        
        return $rs['endereco'];
       endwhile; 
  }

  static function alteraEndereco($endereco){
    require_once 'conexao.php';
    $stmt = conexao::getInstance();
    $stmt = $stmt->prepare("UPDATE `config` SET `endereco`=:endereco WHERE id = 1 ");
          $stmt->bindParam(':endereco', $endereco);
          
          if($stmt->execute()){
               
          } else {
              echo "Ocorreu um erro na inclusão do registro";
              print_r($stmt->errorInfo());
          }
  }

  static function facebook(){
    $stmt = Config::consultaConfig(); 
    while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)):
    
    return $rs['facebook'];
   endwhile; 
  }

  static function alteraFacebook($facebook){
    require_once 'conexao.php';
    $stmt = conexao::getInstance();
    $stmt = $stmt->prepare("UPDATE `config` SET `facebook`=:facebook WHERE id = 1 ");
          $stmt->bindParam(':facebook', $facebook);
          
          if($stmt->execute()){
              
          } else {
              echo "Ocorreu um erro na inclusão do registro";
              print_r($stmt->errorInfo());
          }
    }
  static function twitter(){
    $stmt = Config::consultaConfig(); 
    while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)):
    
    return $rs['twitter'];
  endwhile; 
  }

  static function alteraTwitter($twitter){
    require_once 'conexao.php';
    $stmt = conexao::getInstance();
    $stmt = $stmt->prepare("UPDATE `config` SET `twitter`=:twitter WHERE id = 1 ");
        $stmt->bindParam(':twitter', $twitter);
        
        if($stmt->execute()){
            
        } else {
            echo "Ocorreu um erro na inclusão do registro";
            print_r($stmt->errorInfo());
        }
  }
  static function instagram(){
    $stmt = Config::consultaConfig(); 
    while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)):
    
    return $rs['instagram'];
  endwhile; 
  }

  static function alteraInstagram($instagram){
    require_once 'conexao.php';
    $stmt = conexao::getInstance();
    $stmt = $stmt->prepare("UPDATE `config` SET `instagram`=:instagram WHERE id = 1 ");
        $stmt->bindParam(':instagram', $instagram);
        
        if($stmt->execute()){
            
        } else {
            echo "Ocorreu um erro na inclusão do registro";
            print_r($stmt->errorInfo());
        }
  }
  static function youtube(){
    $stmt = Config::consultaConfig(); 
    while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)):
    
    return $rs['youtube'];
  endwhile; 
  }

  static function alteraYoutube($youtube){
    require_once 'conexao.php';
    $stmt = conexao::getInstance();
    $stmt = $stmt->prepare("UPDATE `config` SET `youtube`=:youtube WHERE id = 1 ");
        $stmt->bindParam(':youtube', $youtube);
        
        if($stmt->execute()){
            
        } else {
            echo "Ocorreu um erro na inclusão do registro";
            print_r($stmt->errorInfo());
        }
  }

  static function sobre(){
    $stmt = Config::consultaConfig(); 
    while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)):
    
    return $rs['sobre'];
  endwhile; 
  }

  static function alteraSobre($sobre){
    require_once 'conexao.php';
    $stmt = conexao::getInstance();
    $stmt = $stmt->prepare("UPDATE `config` SET `sobre`=:sobre WHERE id = 1 ");
        $stmt->bindParam(':sobre', $sobre);
        
        if($stmt->execute()){
            
        } else {
            echo "Ocorreu um erro na inclusão do registro";
            print_r($stmt->errorInfo());
        }
  }

    
}

?>