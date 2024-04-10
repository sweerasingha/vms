import axios from "axios";

export const ValidationMixin = {
    data() {
        return {
            validationMessage: null,
            validationErrors: {},
        };
    },
    methods: {
        resetValidationErrors() {
            this.validationErrors = {};
            this.validationMessage = null;
        },
        convertValidationNotification(err) {
            this.resetValidationErrors();
            if (!(err.response && err.response.data)) return
            this.$root.notify.error({
                title: 'Something went wrong',
                message: err.response.data.message,
            })
        },
        convertValidationError(err) {
            this.resetValidationErrors();
            if (!(err.response && err.response.data)) return
            this.validationMessage = err.response.data.message;
            if (err.response.data.errors) {
                const errors = err.response.data.errors
                for (const error in errors) {
                    this.validationErrors[error] = errors[error][0]
                }
            }
        },
    },
}
