$("#table").DataTable()

const collapsable = $('body')('.collapsable')
const hadir = $("#id")

collapsable.click(() => collapse())
hadir.click(() => hadir())

const collapse = () => {
  $(this).toggleClass('collapsed')
}

const hadir = () => {
  alert("Hadir bos")
}