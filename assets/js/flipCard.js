const cards = document.querySelectorAll('[id^="flip-card"]');

cards.forEach(card => {
  card.addEventListener('click', () => {
  
    if(card.classList.contains('rotate')){
      card.classList.remove("rotate"); 
    }else{
      card.classList.add("rotate"); 
    }
          
  });
});

