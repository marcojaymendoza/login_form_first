const scriptURL = 'https://script.google.com/macros/s/AKfycbwZEpVCOM53XN1ztA478bEKYI36KkWZL23M6ya8jyULUJzXkhjB_Z_wSYKA81TIYfm1mg/exec'
  const form = document.forms['submit-to-google-sheet']
    const msg = document.getElementById("msg");
  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => {msg.innerHTML = "Thank you for the feedback!"
        setTimeout(function(){
            msg.innerHTML = " "
        },5000)
        form.reset();
    })
      .catch(error => console.error('Error!', error.message))
  })