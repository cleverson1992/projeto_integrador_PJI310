const playerVideo = document.getElementById("player-video")

const openFullscreen = () => {

  if (document.fullscreenElement) { 
    document.exitFullscreen()
      .catch((err) => console.error(err))
  } else { 
    document.documentElement.requestFullscreen() 
  } 

}

document.addEventListener('click', (event) => {
  
    //Evitar o comportamento padrão de pausar quando clicado no vídeo
    event.preventDefault()
    openFullscreen()

  }
  
)

//Bloquear o menu quando clica com o mouse sobre a pagina
document.addEventListener('contextmenu', (event) => {
  event.preventDefault()
})

