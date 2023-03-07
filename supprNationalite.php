<?php include "header.php";
include "connexionPdo.php";
$num = $_GET['num'];

$req=$monPdo->prepare("DELETE FROM nationalite where num = :num");
$req->bindParam(':num', $num);
$nb = $req->execute();

echo '<div class="container mt-5">';
echo '<div class="row">
    <div class="col mt-5">';
if($nb == 1) {
    echo' <div class="alert alert-success" role=""alert">
    La nationalité a bien été supprimée </div> ';
}else{
     echo' <div class="alert alert-success" role=""alert">
     Problème : La nationalité n\'a pas été supprimée </div>';
}
?>
    </div>
</div>
<a href="listeNationalite.php" class ="btn btn-primary"> Revenir a la liste des nationalités </a>
</div>

<?php include "footer.php";
?>