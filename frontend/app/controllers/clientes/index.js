import Controller from '@ember/controller';
import { inject as service } from '@ember/service';

export default Controller.extend({
    notifications: service('notifications'),

    actions: {
        remove(model) {
            model.destroyRecord().then(() => {
                this.get('notifications').add(`Cliente "${model.get('nome')}" foi removido.`, 'user');
                this.transitionToRoute('clientes')
            });
        }
    }
});