const api_url = 'https://api.themoviedb.org/3/discover/movie/?certification_country=US&certification=R&sort_by=vote_average.desc&api_key=d80c07e78f18eaa667f66aa4313de646';
const imgpath = 'https://image.tmdb.org/t/p/w185'
const main = document.querySelector('main');
async function peliculas(){
    const pelis = await fetch(api_url);
    let pelisdata;

    pelisdata = await pelis.json();

    console.log(pelisdata);
    


    pelisdata.results.forEach(movie => {
    let {poster_path, title, vote_average} = movie;
    const pelicula = document.createElement('div');
    pelicula.classList.add('peli');
    pelicula.innerHTML = `
    <a target="__blank" href='https://netflix.com'><img src="${imgpath + poster_path}" alt="${title}">
    <div class="info">
        <span class="titulo">${title}</span>
        <span class="val">${vote_average}</span>
    </div>
    </a>`;
    main.appendChild(pelicula);
    });


}
peliculas();