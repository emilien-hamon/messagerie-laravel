@extends('layout.header')
@section('content')
<style>
    input,
    textarea {
        margin-bottom: 10px;
    }

    #htmlContent {
        height: 80vh;
        overflow-y: auto;
        border: 1px solid #ddd;
    }
</style>

    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-md-12 mb-4">
                <div id="htmlContent" class="bg-white p-4 rounded">

                </div>
            </div>
                <form action="{{ route('contact.store') }}" method="post" id="monFormulaire" class="form-inline">

                    @csrf

                    <div class="form-group mx-sm-3 ">

                        <input type="text" class="form-control" name="name" id="name" required minlength="2"
                            maxlength="50" placeholder="Pseudonyme">
                    </div>

                    <div class="form-group mx-sm-3 ">

                        <input type="text" class="form-control" name="message" id="message" required minlength="2"
                            maxlength="200" rows="5" placeholder="Écrivez votre message...">
                    </div>

                    <button type="submit" class="btn btn-info mb-3">{{ __('Envoyer') }}</button>

                </form>
            </div>
        </div>

    </div>

    <script>
        function loadHTML() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("htmlContent").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "http://messagerie.test/api", true);
            xhttp.send();
        }

        loadHTML();
        setInterval(() => {
            loadHTML();
        }, 500);


        let monFormulaire = document.getElementById("monFormulaire");

        monFormulaire.addEventListener('submit', function(e) {

            let name = document.getElementById("name");
            let message = document.getElementById("message");
            if (name.value.trim() == "") {
                e.preventDefault();
            } else {

            }

            if (message.value.trim() == "") {
                e.preventDefault();
            } else {

            }
        });
    </script>
@endsection
