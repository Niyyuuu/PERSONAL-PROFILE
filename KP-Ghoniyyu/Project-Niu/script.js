function dialogHapus() {
  question = confirm("Are you sure you want to delete this Comment/Skill??");
  if (question === true) {
    return true;
  } else {
    return false;
  }
}
