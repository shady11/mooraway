angular
  .module('app')
  .directive('mask', function () {
    return {
      restrict: 'A',
      scope: {ngModel: '=', phone: '='},
      link: function (scope, elem, attr, ctrl) {
        elem.intlTelInput({
          allowDropdown: true,
          autoHideDialCode: false,
          autoPlaceholder: "",
          customPlaceholder: null,
          dropdownContainer: "",
          excludeCountries: [],
          formatOnInit: true,
          geoIpLookup: null,
          initialCountry: "",
          nationalMode: false,
          numberType: "MOBILE",
          onlyCountries: [],
          preferredCountries: ["ru", "by"],
          separateDialCode: false,
          utilsScript: ""
        });
      }
    };
  });