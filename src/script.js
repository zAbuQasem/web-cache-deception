function animateConsole() {
    const frames = [
      "( •_•)",
      "( •_•)>⌐■-■",
      "(⌐■_■)"
    ];
  
    let currentFrame = 0;
  
    const animation = setInterval(() => {
      console.clear();
      console.log(frames[currentFrame]);
  
      currentFrame++;
      if (currentFrame === frames.length) {
        currentFrame = 0;
      }
    }, 500);
  
    setTimeout(() => {
      clearInterval(animation);
      console.clear();
      console.log("Animation stopped!");
    }, 5000);
  }
  
  animateConsole();

  // Copy and paste this file to your browser console