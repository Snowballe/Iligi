<footer class="">
    <div class="bg-light">
        <div class="container">
        <hr class="mb-3">
            <div class="row">
                

                <div class="col ">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item"><a class="text-decoration-none" href="#">À propos</a></li>
                        <li class="list-inline-item">|</li>
                        <li class="list-inline-item"><a class="text-decoration-none" href="#">Vie Privée</a></li>
                        <li class="list-inline-item">|</li>
                        <li class="list-inline-item"><a class="text-decoration-none" href="#">Conditions d'utilisation</a></li>
                        <li class="list-inline-item">|</li>
                        
                        <li class="list-inline-item"><img src="Assets/icons/icons/bootstrap.svg" width="30" height="30" title="Bootstrap" alt="Bootstrap SVG"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){
    if( $('#identity_pieces_landlord').is(':empty')){
        $('#identity_pieces_landlord').print();
    };
});
</script>
</body>

</html>