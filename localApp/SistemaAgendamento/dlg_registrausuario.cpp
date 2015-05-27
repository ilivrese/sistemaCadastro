#include "dlg_registrausuario.h"
#include "ui_dlg_registrausuario.h"

Dlg_registraUsuario::Dlg_registraUsuario(QWidget *parent) :
    QDialog(parent),
    ui(new Ui::Dlg_registraUsuario)
{
    ui->setupUi(this);
}

Dlg_registraUsuario::~Dlg_registraUsuario()
{
    delete ui;
}
