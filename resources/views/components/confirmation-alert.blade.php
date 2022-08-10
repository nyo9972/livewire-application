@push('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
  window.addEventListener('show-delete-confirmation', event => {
    Swal.fire({
      title: 'Tem certeza ?',
      text: "Você não poderá reverter isso!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sim, apague isso!',
      cancelButtonText: 'Não!'
    }).then((result) => {
      if (result.isConfirmed) {
        Livewire.emit('deleteConfirmed')
      }
    })
  })

  window.addEventListener('deleted', event => {
    Swal.fire(
      'Apagado!',
      event.detail.message,
      'success'
    )
  })
</script>
@endpush
