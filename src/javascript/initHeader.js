function initHeaderHt(){
  const head = document.getElementById('head');
  const headStartHeight = head.getBoundingClientRect().height;
  
  setTimeout(()=>{
    head.style.overflow = 'visible';
  }, 0);
}

export {initHeaderHt};