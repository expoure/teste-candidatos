import Controller from '@ember/controller';

export default Controller.extend({
    notifications: service('notifications'),

    actions: {
        submit() {
            this.get('model').save().then(() => {
                this.get('notifications').add('Venda foi editada', 'building');
                this.transitionToRoute('vendas');
            });
        }
    }
});
