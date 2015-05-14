#ifndef ILIVRESYSTEM_H
#define ILIVRESYSTEM_H

#include <QMainWindow>

namespace Ui {
class IlivreSystem;
}

class IlivreSystem : public QMainWindow
{
    Q_OBJECT

public:
    explicit IlivreSystem(QWidget *parent = 0);
    ~IlivreSystem();

private:
    Ui::IlivreSystem *ui;
};

#endif // ILIVRESYSTEM_H
