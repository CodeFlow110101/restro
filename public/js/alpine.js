function header() {
  return {
    show: false,
    isAtTop: true,
    init() {
      window.addEventListener("scroll", () => {
        this.isAtTop = window.scrollY === 0;
      });
    }
  };
}
