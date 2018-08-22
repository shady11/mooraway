angular
  .module('app')
  .component('updateAvatarComponent', {
    templateUrl: 'updateAvatar/updateAvatarView.html',
    bindings: {
      avatar: '<'
    },
    controller: updateAvatarComponentController
  })
;

function updateAvatarComponentController(ngDialog, FileUploader) {
  var vm = this;
  vm.uploaderSettings = {
    url: '/profile/update/photo',
    alias: 'avatar',
    autoUpload: true,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    onSuccessItem: function (file, response) {
      vm.avatar = response.avatar;
    }
  };

  vm.close = close;
  vm.uploader = new FileUploader(vm.uploaderSettings);

  function close() {
    location.reload();
  }
}
