window.addEventListener("DOMContentLoaded", () => {
    const commentForm = document.querySelector("#create-comment");

    if (commentForm) {
        commentForm.addEventListener('submit', createCommentSubmitHandler);
    }
});

const createCommentSubmitHandler = (event) => {
    event.preventDefault();
    const form = event.currentTarget;

    const formData = new FormData(form);
    const data = Object.fromEntries(formData.entries());
    const CabinetID = form.querySelector('#cabinet_id').value;

    axios.post(`/admin/${CabinetID}/comments/add`, data)
        .then(res => {
            console.log('message => ', res.data.comment);
            renderComment(res.data.comment);
        })
        .catch(err => {
            console.error('FAIL RESPONSE =================> ', err);
        });
}

const renderComment = (html) => {
    document.querySelector('.scrollit').innerHTML += html;
    clearForm();
};

const clearForm = () => {
    document.querySelector("#create-new-comment").reset();
};
