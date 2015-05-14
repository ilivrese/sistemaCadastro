#include "ilivresystem.h"
#include <QApplication>

int main(int argc, char *argv[])
{
    QApplication a(argc, argv);
    IlivreSystem w;
    w.show();

    return a.exec();
}
