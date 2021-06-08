<footer class="fixed-bottom">
    <div class="bg-dark footer-dark">
        <div class="container">
            <div class="row">
                <hr>
                <br>
                <div class="col ">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item"><svg style="color:aliceblue" class="bi bi-bootstrap bg-dark my-n1" width="2em" height="2em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14 3H6a3 3 0 00-3 3v8a3 3 0 003 3h8a3 3 0 003-3V6a3 3 0 00-3-3zM6 2a4 4 0 00-4 4v8a4 4 0 004 4h8a4 4 0 004-4V6a4 4 0 00-4-4H6z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M10.537 14H7.062V5.545h3.398c1.588 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.482 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396zM8.375 6.658v2.467h1.558c1.16 0 1.764-.428 1.764-1.23 0-.78-.568-1.237-1.541-1.237H8.375zm1.898 6.229H8.375v-2.725h1.822c1.236 0 1.887.463 1.887 1.348 0 .896-.627 1.377-1.811 1.377z" clip-rule="evenodd" />
                            </svg>
                            <li class="list-inline-item " style="color:aliceblue"><p>Bootstrap</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
  $(document).ready(function() {
    $("#searchInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#lessonList .col-12").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>
</body>

</html>