export function setMotionPost(motions) {
  try {
    let formdata = new FormData()
    formdata.append('golpe', motions.golpe)
    formdata.append('posicion', motions.posicion)
    formdata.append('ubicacion', motions.ubicacionGolpe)
    formdata.append('golpeo', motions.golpeoAcertado)
    formdata.append('punto', motions.punto)
    formdata.append('round', motions.round)
    formdata.append('segundo', motions.timepoGolpe)

    fetch('./logicControl.php', {
      method: 'POST',
      body: formdata
    })
      .then(respuesta => respuesta.json())
      .then(data => {
        console.log(data)
        Swal.fire({
          toast: true,
          title: 'Los datos se han enviado con éxito',
          icon: 'success',
          position: 'top-end',
          showConfirmButton: false,
          timer: 1000
        })
      })
  } catch (error) {
    console.error(error)
    Swal.fire({
      toast: true,
      title: 'Oups! ha ocurrido un error',
      icon: 'error',
      position: 'top-end',
      showConfirmButton: false,
      timer: 1000
    })
  }
}