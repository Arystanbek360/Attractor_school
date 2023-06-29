window.addEventListener("DOMContentLoaded", () => {
    const commentForm = document.querySelector("#create-comment");
    // const deleteForm = document.querySelector("#delete-comment");

    if (commentForm) {
        $('input[type="text"],textarea,select').blur(function () {
            if ($(this).val() === '') {
                $(this).addClass('border-danger text-danger');
                $(this).parent().append('<div class="text-danger">Поле не может быть пустым</div>');
            } else {
                $(this).removeClass('border-danger text-danger');
            }
        });
        commentForm.addEventListener('submit', createCommentSubmitHandler);
    }
    if (deleteForm) {
        deleteForm.addEventListener('submit', deleteCommentSubmitHandler);
    }
});

const createCommentSubmitHandler = (event) => {
    event.preventDefault();
    const form = event.currentTarget;

    const formData = new FormData(form);
    const data = Object.fromEntries(formData.entries());
    const bookId = form.querySelector('#book_id').value;

    axios.post(`/books/${bookId}/comments`, data)
        .then(res => {
            console.log('message => ', res.data.comment);
            renderComment(res.data.comment);
        })
        .catch(err => {
            console.error('FAIL RESPONSE =================> Hello', err);
        });
}

const renderComment = (html) => {
    document.querySelector('.scrollit').innerHTML += html;
    clearForm();
};

const clearForm = () => {
    document.querySelector("#create-comment").reset();
};


// const deleteCommentSubmitHandler = (event) => {
//     event.preventDefault();
//     const form = event.currentTarget;
//     const commentId = form.querySelector('#Comment_id').value;
//
//     axios.delete(`/books/comments/${commentId}`)
//         .then(res => {
//             console.log('message => ', res.data.message);
//             const comment = document.getElementById(`comment-${commentId}`);
//             if (comment) {
//                 comment.remove();
//                 renderComment(res.data.comment);
//             }
//         })
//         .catch(err => {
//             console.error('FAIL RESPONSE =================> ', err);
//         });
// }

