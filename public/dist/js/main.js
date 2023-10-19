function deleteUser(id){
    if(confirm("Are you sure?")){
        fetch('/user/delete/{id}', {
            method: 'delete',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
        }).then(response => {
            if (response.status === 200) {
                alert("Pengguna berhasil dihapus.");
                window.location.reload();
            } else {
                alert("Gagal menghapus pengguna.");
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert("Terjadi kesalahan saat menghapus pengguna.");
        });
    }
}