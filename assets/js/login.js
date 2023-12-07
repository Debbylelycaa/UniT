function activateCard(id) {
    const element1 = document.getElementById(`card-login-1`);
    const element2 = document.getElementById(`login-opt-1`);

    const element3 = document.getElementById(`card-login-2`);
    const element4 = document.getElementById(`login-opt-2`);
    
    if(id === '1') {
        element1.className='card card-login active';
        element2.className='login-opt active';
        element3.className='card card-login';
        element4.className='login-opt';
    } else if(id === '2') {
        element1.className='card card-login';
        element2.className='login-opt';
        element3.className='card card-login active';
        element4.className='login-opt active';
    }
}