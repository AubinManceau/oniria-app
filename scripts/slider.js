const sliders = document.querySelectorAll('.items');
  let isDown = false;
  let startX;
  let scrollLeft;

  const end = () => {
    isDown = false;
    sliders.forEach(slider => {
      slider.classList.remove('active');
    });
  }

  const start = (e) => {
    isDown = true;
    const slider = e.currentTarget;
    slider.classList.add('active');
    startX = e.pageX || e.touches[0].pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
  }

  const move = (e) => {
    if (!isDown) return;
    e.preventDefault();
    const slider = e.currentTarget;
    const x = e.pageX || e.touches[0].pageX - slider.offsetLeft;
    const dist = (x - startX);

    slider.scrollLeft = scrollLeft - dist;
  }

  sliders.forEach(slider => {
    slider.addEventListener('mousedown', start);
    slider.addEventListener('touchstart', start);

    slider.addEventListener('mousemove', move);
    slider.addEventListener('touchmove', move);

    slider.addEventListener('mouseleave', end);
    slider.addEventListener('mouseup', end);
    slider.addEventListener('touchend', end);
  });