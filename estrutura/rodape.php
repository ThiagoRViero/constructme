<!-- Página que é chamada para criação do rodapé da página, todos os links externos são pucados do banco de dados atráves de suas respectivas funções -->
<?php require_once 'classes/config.php'; ?>
<footer class="mt-5  mb-5 ">
      <div class="container border-top border-bottom border-secondary pt-4 pb-4">
        <div class="row">
          
          <div class="col-8 col-md-4 d-flex justify-content-right order-md-last" >
            <a target="_blank" href="<?php echo  Config::facebook();?>" class="btn btn-outline-dark">
              <i class="fab fa-facebook"></i>
            </a>
            <a target="_blank" href="<?php echo  Config::twitter();?>" class="btn btn-outline-dark ml-2">
              <i class="fab fa-twitter"></i>
            </a>
            <a target="_blank" href="<?php echo  Config::instagram();?>" class="btn btn-outline-dark ml-2">
              <i class="fab fa-instagram"></i>
            </a>
            <a target="_blank" href="<?php echo  Config::youtube();?>" class="btn btn-outline-dark ml-2">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
          <div class="col-12 col-md-8 mt-2 mt-md-0">
            <p>
              <a href="index.php">Home</a> | 
              <a href="solucao.php?pagina=1&tipoSolucao=1">Produtos</a> | 
              <a href="solucao.php?pagina=1&tipoSolucao=0">Serviços</a> | 
              <a href="sobre.php">Sobre</a> | 
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <p><?php echo  Config::endereco();?></p>
          </div>
          <div  class="col-md-2 d-flex mt-2 pr-0 mr-0 d-flex row">
            <?php if(isset($_SESSION['usuario'])){?>
              <a class="btn btn-secondary col-12 ms-2 mb-2" href="areaAdm.php">Area do administrador</a>
              <a class="btn btn-secondary col-12 ms-2" href="logado.php?encerrar=sim">Encerrar Sessão</a>
            <?php } else{?>
              <a href="areaAdm.php">Area do administrador</a>
            <?php } ?>
          
          </div>
        </div>
        
        
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>