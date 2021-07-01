PDO {
public __construct(
    string $dsn,
    string|null $username = null,
    string|null $password = null,
    array|null $options = null
)
public beginTransaction(): bool
public commit(): bool
public errorCode(): string|null
public errorInfo(): array
public exec(string $statement): int|false
public getAttribute(int $attribute): bool|int|string|array|null
public static getAvailableDrivers(): array
public inTransaction(): bool
public lastInsertId(string|null $name = null): string|false
public prepare(string $query, array $options = []): PDOStatement|false
public query(string $query, int|null $fetchMode = null): PDOStatement|false
public quote(string $string, int $type = PDO::PARAM_STR): string|false
public rollBack(): bool
public setAttribute(int $attribute, array|int $value): bool
}