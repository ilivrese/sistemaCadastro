#ifndef DLG_REGISTRAUSUARIO_H
#define DLG_REGISTRAUSUARIO_H

#include <QDialog>

namespace Ui {
class Dlg_registraUsuario;
}

class Dlg_registraUsuario : public QDialog
{
    Q_OBJECT

public:
    explicit Dlg_registraUsuario(QWidget *parent = 0);
    ~Dlg_registraUsuario();

private:
    Ui::Dlg_registraUsuario *ui;
};

#endif // DLG_REGISTRAUSUARIO_H
