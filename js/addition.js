window.onload = () => {
    const myArts = document.getElementsByClassName("modal");
    const artslen = myArts.length;

    const myArt = [];
    const myModal = [];

    for(let i = 0 ; i < artslen ; i++) {
        myArt[i] = document.getElementById(`art${i}`);
        myModal[i] = document.getElementById(`modal1${i}`);

        myArt[i].addEventListener('shown.bs.modal', () => {
            myModal[i].focus();
        });
    }

    // const myArt = document.getElementById("art1");
    // const myModal = document.getElementById("modal1");
}
