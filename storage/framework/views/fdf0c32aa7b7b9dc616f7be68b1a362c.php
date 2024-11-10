<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="confirmDeleteLabel">Konfirmasi Hapus Pengguna</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              Anda yakin ingin menghapus pengguna ini?
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-danger" id="confirmDeleteButton">Hapus</button>
          </div>
      </div>
  </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const deleteModal = document.getElementById('confirmDeleteModal');
    let form;

    $('#confirmDeleteModal').on('show.bs.modal', function (event) {
        const button = $(event.relatedTarget);
        const url = button.data('url');
        form = button.closest('form');
    });

    document.getElementById('confirmDeleteButton').addEventListener('click', function () {
        if (form) form.submit();
    });
});
</script><?php /**PATH D:\Kuliah\Magang\Web\WEB LAST\DIAPRA\resources\views/user/modal-delete.blade.php ENDPATH**/ ?>