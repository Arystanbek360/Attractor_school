window.addEventListener("DOMContentLoaded", () => {
    const commentForm = document.querySelector("#create-comment");

    if (commentForm) {
        commentForm.addEventListener('submit', createCommentSubmitHandler);
    }
});

const createCommentSubmitHandler = (event) => {
    event.preventDefault();

    const form     = event.currentTarget;
    const formData = new FormData(form);
    const data     = Object.fromEntries(formData.entries());

    axios({
        url: form.action,
        method: form.method,
        data
    })
        .then(res => {
            renderComment(res.data.comment);
        })
        .catch(err => {
            console.error('FAIL RESPONSE =================> ', err.message);
        });
};

const renderComment = (html) => {
    document.querySelector('.scrollit').innerHTML += html;
    clearForm();
};

const clearForm = () => {
    document.querySelector("#create-comment").reset();
};
