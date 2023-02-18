 <?php 
    $linguagem = $_POST['lingua'];
    switch($linguagem){
        case 'PHP':
         echo "PHP é a mais foda mesmo!";
         break;
        case 'JS':
         echo "JavaScript? Junto com PHP é perfeita!";
         break;
        case 'C':
         echo "C eu acho difícil!";
         break;
        case 'Python':
         echo "Python é fácil e divertida!";
         break;
        default:
         echo "Não conheço essa!";
       }
    
    ?>
