@extends('layouts.master')

@section('content')
    <div class="detail">
        <div id="button">
            <button class="col-sm-12" align:"left" onclick="Passport()">nutritive value</button>
            <form action="" class="form-horizontal" role="form" name="passportTable" id="passportTable">
                <div class="form-group form-inline" align="right">
                    <div class="col-sm-12" >
                        <label>Vegetable introduction number &emsp;</label>
                        <input type="text" class="form-control" name="number" id="number" placeholder="VI000306"><br>
                        <label>Crop accession number &emsp;</label>
                        <input type="text" class="form-control" name="crop_number" id="crop_number" placeholder="V01306"><br>
                        <label>Family &emsp;</label>
                        <input type="text" class="form-control" name="family" id="family" placeholder="LEGUMINOSAE"><br>
                        <label>Genus &emsp;</label>
                        <input type="text" class="form-control" name="genus" id="genus" placeholder="VIGNA"><br>
                        <label>Species &emsp;</label>
                        <input type="text" class="form-control" name="species" id="species" placeholder="MUNGO"><br>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
		function Passport() {
		    var x = document.getElementById("passportTable");
		        if (x.style.display === "none") {
		            x.style.display = "block";
		        } else {
		            x.style.display = "none";
		        }}
    </script>
@endsection
