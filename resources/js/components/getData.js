export default function getData() {
    fetch('https://kepzes.appworld.hu/api/products.php')
        .then(function (adatok) {
            return adatok.json();
        })
        .then(function (adatok) {

            document.getElementById('data-holder').innerHTML = adatok['products'].map(giveData).join('');

            function giveData(termek){
                return '<div class="col-12 col-md-6 col-lg-4">\
                <a href="'+termek.thumbnail+'" class="card text-bg-dark h-100" data-lightbox="roadtrip">\
                    <img src="'+termek.thumbnail+'" class="card-img h-100" style="object-fit:cover" alt="'+termek.title+'">\
                    <div class="card-img-overlay">\
                        <h5 class="card-title" style="text-shadow:0 0 5px #000">'+termek.title+'</h5>\
                    </div>\
                </a>\
            </div>\
            '
            };
        });

};

getData();